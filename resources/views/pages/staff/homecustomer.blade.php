@extends('templates.main')
@section('title', 'Homecustomer')

@section('sidebar')
    @include('layouts.sidebar.staff')
@endsection

@section('style')
<style>
        button {
            background-color: #00396b;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 20%;
        }
    
        th {
            width: 10%;
            text-align: center;
        }
    </style>
@endsection

@section('content')
<div class="w3-padding-large" id="main">
        <!-- Header/Home -->
        <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
            <h1 class="w3-jumbo">หน้าหลัก</h1>

        </header>
        <table style="width: 30% ;text-align:center; margin-top:20px;" align = "right">
                <tr style="font-size:100%;">
                <th>ชื่อ: {{$userlogin->name}}</th>
                <th>นามสกุล: {{$userlogin->surname}}</th>
                <th>ตำแหน่ง: {{$position}}</th>
                </tr>
    
        </table>
    </div>
@endsection