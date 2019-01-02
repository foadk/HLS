@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div> -->
            <div id="player" ></div>
            <script>
                flowplayer('#player', {
                    live: true,  // set if it's a livestream
                    ratio: 9/16, // set the aspect ratio of the stream
                    clip: {
                        sources: [
                            // path to the HLS m3u8
                            { type: "application/x-mpegurl", src: "http://127.0.0.1:3000/hls/playlist"},
                            // path to an optional MP4 fallback, usually not available for live feeds
                            { type: "video/mp4", src: "example_m3u8/1.ts"}
                        ]
                    }
                });
            </script>
        </div>
    </div>
</div>
@endsection

@section('head')

<link rel="stylesheet" href="https://releases.flowplayer.org/7.2.7/skin/skin.css">
<!-- hls.js -->
<script src="https://cdn.jsdelivr.net/npm/hls.js@0.11.0/dist/hls.light.min.js"></script>
<!-- flowplayer -->
<script src="https://releases.flowplayer.org/7.2.7/flowplayer.min.js"></script>

@endsection
