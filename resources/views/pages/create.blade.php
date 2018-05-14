<?php
/**
 * Created by PhpStorm.
 * User: mamun0024
 * Date: 5/14/2018
 * Time: 9:34 PM
 */
?>
@extends('layouts.app')
@section('content')
    <div class="main-block-title">
        <div id="bread-crumps">
            <div style="height: 20px; line-height: 23px;">
                <a href="{{ url('/') }}" id="home_logo">Dashboard</a>
                »
                <a href="{{ url('/') }}">Manage All Links</a>
                »
                <a style="color: #767676;">Links Add</a>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="main-block-padding">
        <div class="pageModule" style="margin: 8px 0;">
            <form class="pageForm" method="POST" name="cRateAdd" action="{{ url('url') }}">

                @csrf

                <div class="pageModuleHeader">
                    <h1>URL Data</h1>
                </div>
                <div class="pageModuleContent">
                    <label class="level_name">URL Link <strong>*</strong></label>
                    <input type="text" name="urlTitle" placeholder="URL Link" autocomplete="off">

                    @if ($errors->has('urlTitle'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('urlTitle') }}</strong>
                        </span>
                    @endif

                    <div class="pageFormSubmit">
                        <input type="submit" class="newSubmit" value="Add URL">
                    </div>
                </div>
                <div class="clear"></div>
            </form>
        </div>
    </div>
@endsection