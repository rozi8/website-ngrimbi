@extends('layouts.app')

@section('title','Beranda')

@section('content')
<x-home.hero />
<x-home.news />
<x-home.agenda />
<x-home.multimedia />
<x-home.business />
<x-home.maps />
@endsection
