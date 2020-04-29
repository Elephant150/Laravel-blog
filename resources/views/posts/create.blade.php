@extends('layouts.layout')

@section('content')
    <div class="row">
        <form action="" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title">
            </div>
            <div class="form-group">
                <label for="intro">Intro</label>
                <textarea name="intro" id="intro" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
                <label for="body_text">Text</label>
                <textarea name="body_text" id="body_text" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
                <label for="picture">Picture</label>
                <input type="file" name="picture" id="picture">
            </div>
        </form>

    </div>
@endsection
