<?php
/**
 * Created by PhpStorm.
 * User: mamun0024
 * Date: 5/3/2018
 * Time: 12:55 AM
 */
?>
@extends('app')
@section('content')
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
                    <td><p class="ticketInfo_b"><i class="fa fa-link my-fa-padding-right"></i>{{ $link->urlTitle }}</td>
                    <td><a class="table-button" href="{{ url('link', $link->id ) }}"><i class="fa fa-bar-chart"></i>&nbsp; All Data</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection