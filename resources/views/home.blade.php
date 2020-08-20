@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://res-4.cloudinary.com/crunchbase-production/image/upload/c_lpad,f_auto,q_auto:eco/ikqra03zdnggljdu5vv0" class="rounded-circle" height="100">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{ $user->username }}</h1></div>
            <div class='d-flex'>
                <div class='pr-5'><strong>100</strong> posts</div>
                <div class='pr-5'><strong>45k</strong> followers</div>
                <div class='pr-5'><strong>234</strong> following</div>
            </div>
            <div class="pt-2"><strong>{{ $user->profile->title }}</strong></div>
            <div class="pt-2">{{ $user->profile->description }}</div>
            <div class="pt-2"><a href={{ $user->profile->url }} target="blank">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    <div class="row">
        <div class="col-4 pt-4"><img src="https://instagram.fath3-4.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c1.0.748.748a/s640x640/117532617_329372988207182_2163166929089500044_n.jpg?_nc_ht=instagram.fath3-4.fna.fbcdn.net&_nc_cat=102&_nc_ohc=TEbl_-igKNAAX8syMfa&oh=18e37613309313c68d57a5dc77ea5e06&oe=5F653B00" class="w-100"></div>
        <div class="col-4 pt-4"><img src="https://instagram.fath3-4.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c1.0.748.748a/s640x640/117532617_329372988207182_2163166929089500044_n.jpg?_nc_ht=instagram.fath3-4.fna.fbcdn.net&_nc_cat=102&_nc_ohc=TEbl_-igKNAAX8syMfa&oh=18e37613309313c68d57a5dc77ea5e06&oe=5F653B00" class="w-100"></div>
        <div class="col-4 pt-4"><img src="https://instagram.fath3-4.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c1.0.748.748a/s640x640/117532617_329372988207182_2163166929089500044_n.jpg?_nc_ht=instagram.fath3-4.fna.fbcdn.net&_nc_cat=102&_nc_ohc=TEbl_-igKNAAX8syMfa&oh=18e37613309313c68d57a5dc77ea5e06&oe=5F653B00" class="w-100"></div>
    </div>
</div>
@endsection
