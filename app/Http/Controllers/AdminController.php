<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\Admin;
use App\Models\User;
use App\Models\Rule;

class AdminController extends Controller
{
    //
    function index()
    {
        return view('admin.landing');
    }

    function login()
    {
        return view('admin.login');
    }

    function loginAdmin(Request $request)
    {
        Session::flash('email', $request->email);
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ],
        [
            'email.required' => 'Email is required',
            'email.email' => 'Email is not valid',
            'password.required' => 'Password is required'
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::guard('admin')->attempt($infologin)) {
            // Authentication passed...
            $request->session()->regenerate();
            return redirect()->intended('/admin/home') -> with('success', 'Login success');
        } else {
            // Authentication failed...
            return redirect('/admin/login')->withErrors('Your email or password is incorrect');
        }
    }
    
    function logout()
    {  
        Auth::guard('admin')->logout();
        return view('admin.login')->with('success', 'Logout success');
    }

    function home()
    {
        $data = Auth::guard('admin')->user();
        return view('admin.main') ->with('data', $data);
    }

    function administrator()
    {
        $nomor = 1;
        $nama = Auth::guard('admin')->user();
        $data = DB::table('admins')->get();
        return view('admin.administrator.administrator')->with('data', $data) -> with('nomor', $nomor) -> with('nama', $nama);
    }

    //WhatsApp
    function whatsapp()
    {
        $data = DB::table('whatsapps')->first();
        return view('admin.administrator.whatsapp')->with('data', $data);
    }

    function updateWhatsapp(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'phone' => 'required',
            'message' => 'required',
        ],
        [
            'phone.required' => 'Phone is required',
            'message.required' => 'Message is required'
        ]);

        DB::table('whatsapps')->where('id', 1)->update([
            'phone' => $request->phone,
            'message' => $request->message
        ]);

        return redirect('/admin/administrator')->with('success', 'Whatsapp updated successfully');
    }

    // ADMIN
    function addAdmin()
    {
        return view('admin.administrator.addAdmin');
    }

    function createAdmin(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:admins',
            'password' => 'required',
        ],
        [
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'email.email' => 'Email is not valid',
            'email.unique' => 'Email has been used',
            'password.required' => 'Password is required'
        ]);

        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect('/admin/administrator')->with('success', 'Admin created successfully');
    }

    function updateAdmin(string $id): View
    {
        $admin = Admin::findOrFail($id);
        return view('admin.administrator.updateAdmin', compact('admin'));
    }

    function editAdmin(Request $request, string $id): RedirectResponse
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ],
        [
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'password.required' => 'Password is required'
        ]);

        $admin = Admin::findOrFail($id);
        $admin->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect('/admin/administrator')->with('success', 'Profile updated successfully');
    }

    function deleteAdmin(string $id): RedirectResponse
    {
        $admin = Admin::findOrFail($id);
        $admin->delete();
        return redirect('/admin/administrator')->with('success', 'Admin deleted successfully');
    }

    //USER

    function user()
    {
        $nomor = 1;
        $data = DB::table('users')->get();
        return view('admin.user.user')->with('data', $data) -> with('nomor', $nomor);
    }

    function addUser()
    {
        return view('admin.user.addUser');
    }

    function createUser(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ],
        [
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'email.email' => 'Email is not valid',
            'email.unique' => 'Email has been used',
            'password.required' => 'Password is required'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect('/admin/user')->with('success', 'User created successfully');
    }

    function updateUser(string $id): View
    {
        $user = User::findOrFail($id);
        return view('admin.user.updateUser', compact('user'));
    }

    function editUser(Request $request, string $id): RedirectResponse
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ],
        [
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'password.required' => 'Password is required'
        ]);

        $user = User::findOrFail($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect('/admin/user')->with('success', 'Profile updated successfully');
    }

    function deleteuser(string $id): RedirectResponse
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('/admin/user')->with('success', 'User deleted successfully');
    }

    //RULES

    function rules()
    {
        $nomor = 1;
        $data = DB::table('rules')
            ->join('diseases', 'rules.penyakit_id', '=', 'diseases.id')
            ->join('symptoms', 'rules.gejala_id', '=', 'symptoms.id')
            ->select('rules.*', 'diseases.namaPenyakit as namaPenyakit', 'symptoms.namaGejala as namaGejala')
            ->orderBy('rules.penyakit_id', 'asc')
            ->where('rules.CFValue', '!=', 0)
            ->paginate(15);
            // ->get();
        $penyakit = DB::table('diseases')->get();

        // $data->links();
        Log::info($data);
        return view('admin.rules.rules')->with('data', $data)->with('nomor', $nomor)->with('penyakit', $penyakit);
    }

        function searchRules(Request $request)
    {
        $nomor = 1;
        $data = DB::table('rules')
            ->join('diseases', 'rules.penyakit_id', '=', 'diseases.id')
            ->join('symptoms', 'rules.gejala_id', '=', 'symptoms.id')
            ->select('rules.*', 'diseases.namaPenyakit as namaPenyakit', 'symptoms.namaGejala as namaGejala')
            ->where('diseases.namaPenyakit', 'like', '%' . $request->search . '%')
            ->where('rules.CFValue', '!=', 0)
            // ->orWhere('symptoms.namaGejala', 'like', '%' . $request->search . '%')
            // ->orWhere('rules.CFValue', 'like', '%' . $request->search . '%')
            ->orderBy('rules.penyakit_id', 'asc')
            ->paginate(100);

        $penyakit = DB::table('diseases')->get();
        

        return view('admin.rules.rules')->with('data', $data)->with('nomor', $nomor)->with('penyakit', $penyakit);
    }

    function addRules()
    {
        $diseases = DB::table('diseases')->get();
        $symptoms = DB::table('symptoms')->get();
        return view('admin.rules.addRules')->with('diseases', $diseases)->with('symptoms', $symptoms);
    }

    function createRules(Request $request): RedirectResponse
    {
        if (DB::table('rules')
            ->where('gejala_id', $request->gejala_id)
            ->where('penyakit_id', $request->penyakit_id)
            ->where('CFValue', '!=', '0')
            ->exists()
            ) {
            $this->validate($request, [
            'gejala_id' => 'unique:rules',
            ],
            [
            'gejala_id.unique' => 'Rule already exists',
            ]);
        }

        $totalGejala = count(DB::table('symptoms')->get());
        Log::info($totalGejala);

        DB::table('rules')
            ->where('gejala_id', $request->gejala_id)
            ->where('penyakit_id', $request->penyakit_id)
            ->update([
                'penyakit_id' => $request->penyakit_id,
                'gejala_id' => $request->gejala_id,
                'CFValue' => $request->CFValue
            ]);

        Log::info($request);
        return redirect('/admin/rules')->with('success', 'Rule created successfully');
    }

    function updateRules(string $id): View
    {
        $rules = Rule::findOrFail($id);
        $diseases = DB::table('diseases')->get();
        $symptoms = DB::table('symptoms')->get();
        return view('admin.rules.updateRules', compact('rules'))->with('diseases', $diseases)->with('symptoms', $symptoms);
    }

    function editRules(Request $request, string $id): RedirectResponse
    {

        $rules = Rule::findOrFail($id);
        $rules->update([
            'penyakit_id' => $request->penyakit,
            'gejala_id' => $request->gejala,
            'CFValue' => $request->cf
        ]);

        return redirect('/admin/rules')->with('success', 'Rule updated successfully');
    }

    function deleteRules(string $id): RedirectResponse
    {
        $rule = DB::table('rules')->where('id', $id)->delete();
        return redirect('/admin/rules')->with('success', 'Rule deleted successfully');
    }



    //SYMPTOMS

    function symptoms()
    {
        $nomor = 1;
        $data = DB::table('symptoms')->get();
        return view('admin.symptoms.symptoms')->with('data', $data)->with('nomor', $nomor);
    }

    function addSymptoms()
    {
        return view('admin.symptoms.addSymptoms');
    }

    function createSymptoms(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'kodeGejala' => 'required|unique:symptoms',
            'namaGejala' => 'required',
        ],
        [
            'kodeGejala.required' => 'Symptom Code is required',
            'kodeGejala.unique' => 'Symptom Code has been used',
            'namaGejala.required' => 'Symptom Name is required'
        ]);

        DB::table('symptoms')->insert([
            'kodeGejala' => $request->kodeGejala,
            'namaGejala' => $request->namaGejala
        ]);

        $totalPenyakit = count(DB::table('diseases')->get());
        for ($i = 1; $i <= $totalPenyakit; $i++) { 
            DB::table('rules')->insert([
                'penyakit_id' => $i,
                'gejala_id' => DB::table('symptoms')->max('id'),
                'CFValue' => 0
            ]);
        }

        return redirect('/admin/symptoms')->with('success', 'Symptom created successfully');
    }

    function updateSymptoms(string $id): View
    {
        $symptoms = DB::table('symptoms')->where('id', $id)->first();
        return view('admin.symptoms.updateSymptoms', compact('symptoms'));
    }

    function editSymptoms(Request $request, string $id): RedirectResponse
    {
        $this->validate($request, [
            'kodeGejala' => 'required',
            'namaGejala' => 'required',
        ],
        [
            'kodeGejala.required' => 'Symptom Code is required',
            'namaGejala.required' => 'Symptom Name is required'
        ]);

        DB::table('symptoms')->where('id', $id)->update([
            'kodeGejala' => $request->kodeGejala,
            'namaGejala' => $request->namaGejala
        ]);

        return redirect('/admin/symptoms')->with('success', 'Symptom updated successfully');
    }

    function deleteSymptoms(string $id): RedirectResponse
    {
        $symptom = DB::table('symptoms')->where('id', $id)->delete();
        return redirect('/admin/symptoms')->with('success', 'Symptom deleted successfully');
    }

    //DISEASES

    function diseases()
    {
        $nomor = 1;
        $data = DB::table('diseases')->get();
        return view('admin.diseases.diseases')->with('data', $data)->with('nomor', $nomor);
    }

    function addDiseases()
    {
        return view('admin.diseases.addDiseases');
    }

    function createDiseases(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'kodePenyakit' => 'required|unique:diseases',
            'namaPenyakit' => 'required',
            'detailPenyakit' => 'required',
            'pencegahanPenyakit' => 'required',
        ],
        [
            'kodePenyakit.required' => 'Disease Code is required',
            'kodePenyakit.unique' => 'Disease Code has been used',
            'namaPenyakit.required' => 'Disease Name is required',
            'detailPenyakit.required' => 'Disease Detail is required',
            'pencegahanPenyakit.required' => 'Disease Prevention is required'
        ]);

        DB::table('diseases')->insert([
            'kodePenyakit' => $request->kodePenyakit,
            'namaPenyakit' => $request->namaPenyakit,
            'detailPenyakit' => $request->detailPenyakit,
            'pencegahanPenyakit' => $request->pencegahanPenyakit
        ]);

        $totalGejala = count(DB::table('symptoms')->get());

        for ($i = 1; $i <= $totalGejala; $i++) { 
            DB::table('rules')->insert([
                'penyakit_id' => DB::table('diseases')->max('id'),
                'gejala_id' => $i,
                'CFValue' => 0
            ]);
        }

        return redirect('/admin/diseases')->with('success', 'Disease created successfully');
    }

    function updateDiseases(string $id): View
    {
        $diseases = DB::table('diseases')->where('id', $id)->first();
        return view('admin.diseases.updateDiseases', compact('diseases'));
    }

    function editDiseases(Request $request, string $id): RedirectResponse
    {
        $this->validate($request, [
            'kodePenyakit' => 'required',
            // 'kodePenyakit' => 'required|unique:diseases',
            'namaPenyakit' => 'required',
            'detailPenyakit' => 'required',
            'pencegahanPenyakit' => 'required',
        ],
        [
            'kodePenyakit.required' => 'Disease Code is required',
            // 'kodePenyakit.unique' => 'Disease Code has been used',
            'namaPenyakit.required' => 'Disease Name is required',
            'detailPenyakit.required' => 'Disease Detail is required',
            'pencegahanPenyakit.required' => 'Disease Prevention is required'
        ]);

        DB::table('diseases')->where('id', $id)->update([
            'kodePenyakit' => $request->kodePenyakit,
            'namaPenyakit' => $request->namaPenyakit,
            'detailPenyakit' => $request->detailPenyakit,
            'pencegahanPenyakit' => $request->pencegahanPenyakit
        ]);

        return redirect('/admin/diseases')->with('success', 'Disease updated successfully');
    }

    function deleteDiseases(string $id): RedirectResponse
    {
        $disease = DB::table('diseases')->where('id', $id)->delete();
        return redirect('/admin/diseases')->with('success', 'Disease deleted successfully');
    }

    //HISTORY

    function history()
    {
        $nomor = 1;
        $histories = DB::table('histories')
            ->join('users', 'histories.user_id', '=', 'users.id')
            ->join('diseases', 'histories.penyakit_id', '=', 'diseases.id')
            ->select('histories.*', 'users.name as namaUser', 'diseases.namaPenyakit as namaPenyakit')
            ->orderBy('histories.created_at', 'desc')
            ->get();

         $histories->transform(function ($history, $key) {
        $history->created_at = Carbon::parse($history->created_at)->format('d/m/Y');
        return $history;
        });
        return view('admin.history.history')->with('histories', $histories)->with('nomor', $nomor);
    }

    function searchHistory(Request $request)
    {
        $nomor = 1;
        $histories = DB::table('histories')
            ->join('users', 'histories.user_id', '=', 'users.id')
            ->join('diseases', 'histories.penyakit_id', '=', 'diseases.id')
            ->select('histories.*', 'users.name as namaUser', 'diseases.namaPenyakit as namaPenyakit')
            ->where('histories.created_at', 'like', '%' . $request->search . '%')
            ->orWhere('users.name', 'like', '%' . $request->search . '%')
            ->orWhere('diseases.namaPenyakit', 'like', '%' . $request->search . '%')
            ->orWhere('histories.hasilDiagnosis', 'like', '%' . $request->search . '%')
            ->orWhere('histories.namaKucing', 'like', '%' . $request->search . '%')
            ->orderBy('histories.created_at', 'desc')
            ->get();

        $histories->transform(function ($history, $key) {
        $history->created_at = Carbon::parse($history->created_at)->format('d/m/Y');
        return $history;
        });

        return view('admin.history.history')->with('histories', $histories)->with('nomor', $nomor);
    }

}
