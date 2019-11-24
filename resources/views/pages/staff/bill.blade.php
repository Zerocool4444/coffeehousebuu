@extends('templates.main')
@section('title', 'Bill')

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
</style>
@endsection


@section('content')
<div class="w3-padding-large" id="main">
    <!-- Header/Home -->
    <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
        <h1 class="w3-jumbo">ใบเสร็จ</h1>

    </header>
    <center>
        <a href="homecustomer.html">

            <button>ทำการเสร็จสิ้น</button>
        </a>
    </center>
</div>

@endsection