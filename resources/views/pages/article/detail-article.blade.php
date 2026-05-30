@extends('layout.app')

@section('title', $article->title . ' | House Ilmu Indonesia')

@section('head')
@endsection

@section('content')
<section class="article container-xl mt-5">

    <div class="back d-inline">
        <a href="{{ route('article.index') }}">
            <i class="fa-solid fa-chevron-left"></i> Kembali
        </a>
    </div>

    <div class="article-container container-xl d-flex flex-column justify-content-center align-items-start">

        <div class="article-info d-flex flex-column">
            <h1 class="py-4 fw-bold" style="color: #174EA6;">
                {{ $article->title }}
            </h1>

            <p class="py-3" style="color: #797676;">
                {{ \Carbon\Carbon::parse($article->date)->translatedFormat('l, d F Y') }}
            </p>

            <p>Penulis : {{ $article->author }}</p>
            <p>Editor : {{ $article->editor }}</p>
        </div>

        <img class="min-h-[300px] max-h-[500px] w-full object-contain rounded-4 my-5"
             src="{{ asset('storage/' . $article->img) }}"
             alt="gambar artikel {{ Str::slug($article->title) }}">

        <div class="article-text container-xl bg-secondary_HI outline outline-8 outline-primary_HI p-4 rounded-lg text-white">
            {!! str_replace('<img', '<img class="img-fluid"', $article->text) !!}
        </div>

        <div class="article-sosmed container-xl d-flex align-items-center py-5">
            <p style="color: #1746A2;">Share with :</p>

            <a class="rounded-5 mx-3"
               href="https://www.linkedin.com/company/house-ilmu-indonesia"
               target="_blank">
                <i class="fa-brands fa-linkedin"></i>
            </a>

            <a class="rounded-5 mx-3"
               href="https://www.tiktok.com/@houseilmu.id"
               target="_blank">
                <i class="fa-brands fa-tiktok"></i>
            </a>

            <a class="rounded-5 mx-3"
               href="https://www.instagram.com/houseilmu.id"
               target="_blank">
                <i class="fa-brands fa-instagram"></i>
            </a>
        </div>

        {{-- Comment list --}}
        @if (isset($comments) && $comments->count() > 0)
            <div class="article-comment container-xl d-flex flex-column mb-4">

                <h1 class="py-2 fw-bold" style="color: #174EA6;">
                    {{ $comments->count() }} Komentar
                </h1>

                @foreach ($comments as $comment)
                    <div class="d-flex gap-3 mb-4 align-items-start">

                        {{-- Avatar --}}
                        <div class="rounded-circle bg-warning d-flex align-items-center justify-content-center fw-bold text-white flex-shrink-0"
                             style="width:42px; height:42px; font-size:16px;">
                            {{ strtoupper(substr($comment->name ?? '', 0, 1)) }}
                        </div>

                        <div>
                            <div class="d-flex align-items-center gap-2 mb-1">
                                <span class="fw-bold" style="font-size:14px;">
                                    {{ $comment->name }}
                                </span>

                                <span class="text-muted" style="font-size:12px;">
                                    {{ optional($comment->created_at)->diffForHumans() }}
                                </span>
                            </div>

                            <p style="font-size:14px;" class="mb-0">
                                {{ $comment->content }}
                            </p>
                        </div>

                    </div>
                @endforeach

                <hr>
            </div>
        @endif

        {{-- Success flash --}}
        @if (session('comment_success'))
            <div class="container-xl alert alert-success mb-3">
                {{ session('comment_success') }}
            </div>
        @endif

        {{-- Comment form --}}
        <div class="article-comment container-xl d-flex flex-column mb-4">

            <h1 class="py-2 fw-bold" style="color: #174EA6;">
                Leave a Reply
            </h1>

            <p class="py-2">
                Your email address will not be published.
                Required fields are marked
                <span style="color:#FF0000;">*</span>
            </p>

            <form class="comment-form"
                  action="{{ route('article.comment.store', $article->slug) }}"
                  method="POST">

                @csrf

                <div class="mb-4">
                    <h5 class="fw-bold">
                        Comment <span style="color:#FF0000;">*</span>
                    </h5>

                    <textarea
                        class="py-2 px-1 rounded-4 w-100 @error('content') is-invalid @enderror"
                        name="content"
                        id="comment"
                        cols="30"
                        rows="10"
                        required>{{ old('content') }}</textarea>

                    @error('content')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <h5 class="fw-bold">
                        Name <span style="color:#FF0000;">*</span>
                    </h5>

                    <input
                        class="py-2 px-1 rounded-4 w-100 @error('name') is-invalid @enderror"
                        type="text"
                        name="name"
                        id="name"
                        value="{{ old('name') }}"
                        required>

                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-2">
                    <h5 class="fw-bold">
                        Email <span style="color:#FF0000;">*</span>
                    </h5>

                    <input
                        class="py-2 px-1 rounded-4 w-100 @error('email') is-invalid @enderror"
                        type="email"
                        name="email"
                        id="email"
                        value="{{ old('email') }}"
                        required>

                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <br>

                <button class="post-btn float-end fw-bold py-3 px-4 rounded-4"
                        type="submit"
                        name="send_comment">
                    Post a comment
                </button>

            </form>
        </div>

    </div>
</section>
@endsection