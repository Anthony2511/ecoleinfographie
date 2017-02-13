@extends('layout')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>Ceci est le nom de la page : <?php echo $page->title; ?></p>
@endsection

@section('content')
    <p>This is my body content.</p>
    <?php echo $page->description; ?>
@endsection
