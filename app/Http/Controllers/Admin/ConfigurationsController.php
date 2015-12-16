<?php

namespace App\Http\Controllers\Admin;

use App\Configuration;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ConfigurationsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role.admin');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $configuration = Configuration::find(1);
        return view('admin.configurations.show', ['configuration' => $configuration]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $configuration = Configuration::find(1);
        return view('admin.configurations.edit', ['configuration' => $configuration]);
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
        $configuration = Configuration::find($id);
        $configuration->update($request->all());
        $configuration->save();
        return redirect('admin/configurations');
    }
}
