<?php
/**
 * Created by PhpStorm.
 * User: mamun0024
 * Date: 5/3/2018
 * Time: 1:16 AM
 */
?>
@extends('layouts.app')
@section('content')
<div class="main-block-title">
    <div id="bread-crumps">
        <div style="height: 20px; line-height: 23px;">
            <a href="{{ url('/') }}" id="home_logo">Dashboard</a>
            »
            <a href="{{ url('/') }}">All Links</a>
            »
            <a style="color: #767676;">Show Link Details</a>
        </div>
    </div>
    <div style="float: right; height: 20px; ">
    </div>
    <div class="clear"></div>
</div>
<div class="main-block-padding">
    <h1 class="linkName">URL Link : {{ $urlTitle }}</h1>
    <div class="pageModule" style="margin: 8px 0;">
        <table class="ticketInfo">
            <thead>
            <tr>
                <th style="width: 30px;">S/N</th>
                <th>Product Title</th>
                <th>Product Image</th>
                <th>Product Description</th>
            </tr>
            </thead>
            <tbody>
            @foreach( $linkDetails as $liDe )
                <tr>
                    <td><p class="ticketInfo_b">{{ $loop->iteration }}</p></td>
                    <td>{{ $liDe->pTitle }}</td>
                    <td><img style="width: 200px;" src="{{ $liDe->pImg }}"></td>
                    <td>{{ $liDe->pDesc }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection