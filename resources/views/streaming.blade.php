@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div id="player" ></div>
            <script>
                flowplayer('#player', {
                    live: true,  // set if it's a livestream
                    ratio: 9/16, // set the aspect ratio of the stream
                    clip: {
                        sources: [
                            // path to the HLS m3u8
                            { type: "application/x-mpegurl", src: "{{ env('hlsserver') }}/hls/{{ $token }}/playlist"},
                            // path to an optional MP4 fallback, usually not available for live feeds
                            // { type: "video/mp4", src: "example_m3u8/1.ts"}
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
