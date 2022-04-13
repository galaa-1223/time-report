<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\Classes;

class ClassController extends Controller
{
    public function index()
    {
        if(Auth::check()){

            $pageTitle = 'Ангиуд';
            $pageName = 'classes';
            $class = Classes::orderBy('created_at', 'desc')->paginate(9);

            return view('pages.dashboard.index', [
                'page_title' => $pageTitle,
                'page_name' => $pageName,
                'classes' => $class
            ]);
        }

        return redirect("login");
    }

    // public function index()
    // {
    //     $pageTitle = 'Ангиуд';
    //     $pageName = 'angi';
    //     $angi = Angi::orderBy('created_at', 'desc')->paginate(9);

    //     $activeMenu = activeMenu($pageName);

    //     return view('admin/pages/'.$pageName.'/index', [
    //         'first_page_name' => $activeMenu['first_page_name'],
    //         'page_title' => $pageTitle,
    //         'page_name' => $pageName,
    //         'angiud' => $angi
    //     ]);
    // }

    // public function add()
    // {
    //     $pageTitle = 'Анги нэмэх';
    //     $pageName = 'angi';

    //     $activeMenu = activeMenu($pageName);

    //     return view('admin/pages/'.$pageName.'/add', [
    //         'first_page_name' => $activeMenu['first_page_name'],
    //         'page_title' => $pageTitle,
    //         'page_name' => $pageName
    //     ]);
    // }

    // public function store(Request $request)
    // {

    //     $angi = new Angi;

    //     $angi->ner = Str::ucfirst($request->ner);
    //     $angi->course = $request->course;
    //     $angi->buleg = Str::ucfirst($request->buleg);
    //     $angi->m_id = $request->m_id;
    //     $angi->b_id = $request->b_id;

    //     $angi->save();

    //     switch ($request->input('action')) {
    //         case 'save':
    //             return redirect()->route('admin-angi')->with('success', 'Анги амжилттай нэмэгдлээ!'); 
    //             break;
    
    //         case 'save_and_new':
    //             return back()->with('success', 'Анги амжилттай нэмэгдлээ!');
    //             break;
    
    //         case 'preview':
    //             echo 'preview';
    //             break;
    //     }
    // }

    // public function edit($id)
    // {
    //     $pageTitle = 'Анги засварлах';
    //     $pageName = 'angi';

    //     $teacher = Angi::findOrFail($id);

    //     $activeMenu = activeMenu($pageName);

    //     return view('admin/pages/'.$pageName.'/edit', [
    //         'first_page_name' => $activeMenu['first_page_name'],
    //         'page_title' => $pageTitle,
    //         'page_name' => $pageName,
    //         'teacher' => $teacher
    //     ]);
    // }

    // public function update(Request $request, $id)
    // {
    //     $angi = Angi::findOrFail($id);

    //     $angi->ner = Str::ucfirst($request->ner);
    //     $angi->course = $request->course;
    //     $angi->buleg = Str::ucfirst($request->buleg);
    //     $angi->m_id = $request->m_id;
    //     $angi->b_id = $request->b_id;

    //     $angi->save();

    //     switch ($request->input('action')) {
    //         case 'save':
    //             return redirect()->route('admin-angi')->with('success', 'Анги амжилттай засварлагдлаа!'); 
    //             break;
    
    //         case 'save_and_new':
    //             return back()->with('success', 'Анги амжилттай засварлагдлаа!');
    //             break;
    
    //         case 'preview':
    //             echo 'preview';
    //             break;
    //     }
    // }

    // public function destroy(Request $request, $id)
    // {
    //     $member = angi::findOrFail($id);
    //     $member->delete();

    //     return redirect()->route('angi')->with('success', 'Анги устгагдлаа нэмэгдлээ!'); 

    // }
}
