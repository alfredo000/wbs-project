@php
    $hideFooter = true; // Atur ini untuk menyembunyikan footer
@endphp
@extends('layouts.main')
@section('container')
<style>
    body {
        background-color: #F5F5F5;
        margin: 0;
        padding: 0;
    }
    .form-container {
            width: 50%;
            margin: 0 auto;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
        }

        .form-group input, .form-group select, .form-group textarea {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group select {
            padding: 10px;
        }

        .form-group textarea {
            resize: vertical;
        }
</style>

