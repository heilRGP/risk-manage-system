<?php

namespace App\Http\Controllers;

use App\Risk;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use DB;

class RiskManageController extends Controller
{

    /**
     * 创建风险
     */
    public function createRisk(Request $request){

        $input = $request->all();
        $input['creator_id'] = Auth::user()->id;
        $input['tracker_id'] = null;
        //存入数据库
        Risk::create($input);
        //重定向
        return redirect('/create');

    }

    public function createRiskPage(){

        $selectProjects = 'select * from project';
        $projects = DB::select($selectProjects);

        return view('RiskManage.createRisk', compact('projects'));
    }

    /**
     * 显示所有风险
     */
    public function showAllRisk(){

        $selectRisks = 'select * from risk';
        $risks = DB::select($selectRisks);

        return view('RiskManage.showAllRisk', compact('risks'));
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
