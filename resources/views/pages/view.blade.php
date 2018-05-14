<?php
/**
 * Created by PhpStorm.
 * User: mamun0024
 * Date: 5/3/2018
 * Time: 12:55 AM
 */
?>
@extends('layouts.app')
@section('content')
<div class="main-block-title">
    <div id="bread-crumps">
        <div style="height: 20px; line-height: 23px;">
            <a href="{{ url('/') }}" id="home_logo">Dashboard</a>
            »
            <a style="color: #767676;">Manage All Links</a>
        </div>
    </div>
    <div style="float: right; height: 20px; ">
        <a style="margin-left: 0;" title="Add URL" class="table-button" href="{{ url("url/create") }}"><i class="fa fa-plus"></i>&nbsp; Add URL</a>
    </div>
    <div class="clear"></div>
</div>
<div class="main-block-padding">
    <div class="pageModule" style="margin: 8px 0;">
        <table class="ticketInfo">
            <thead>
            <tr>
                <th style="width: 30px;">S/N</th>
                <th>Url Link</th>
                <th style="width: 95px;">Activity </th>
            </tr>
            </thead>
            <tbody>
            @foreach( $allLinks as $link )
                <tr>
                    <td><p class="ticketInfo_b">{{ $loop->iteration }}</p></td>
                    <td><i class="fa fa-link my-fa-padding-right"></i>{{ $link->urlTitle }}</td>
                    <td><a class="table-button" href="{{ url('link', $link->id ) }}"><i class="fa fa-bar-chart"></i>&nbsp; All Data</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection