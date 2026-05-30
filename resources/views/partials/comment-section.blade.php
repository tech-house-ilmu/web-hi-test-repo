{{-- Comment list --}}
@if ($comments->count() > 0)
    <div class="mb-10">
        <h3 class="text-lg font-semibold text-gray-800 mb-6">
            {{ $comments->count() }} Komentar
        </h3>

        @foreach ($comments as $comment)
            <div class="flex gap-4 mb-6">
                <div class="flex-shrink-0 w-10 h-10 rounded-full bg-amber-100 flex items-center
                            justify-center text-amber-700 font-bold text-sm uppercase select-none">
                    {{ substr($comment->name, 0, 1) }}
                </div>
                <div class="flex-1">
                    <div class="flex items-center gap-2 mb-1">
                        <span class="font-semibold text-gray-800 text-sm">{{ $comment->name }}</span>
                        <span class="text-xs text-gray-400">{{ $comment->created_at->diffForHumans() }}</span>
                    </div>
                    <p class="text-gray-700 text-sm leading-relaxed">{{ $comment->content }}</p>
                </div>
            </div>
        @endforeach
    </div>
    <hr class="mb-10 border-gray-200">
@endif

{{-- Success flash --}}
@if (session('comment_success'))
    <div class="mb-6 p-4 bg-green-100 border border-green-300 text-green-800 rounded-lg text-sm">
        {{ session('comment_success') }}
    </div>
@endif

{{-- Comment form — matches existing UI design --}}
<div>
    <h2 class="text-2xl font-bold text-gray-900 mb-1">Leave a Reply</h2>
    <p class="text-sm text-gray-500 mb-6">
        Your email address will not be published. Required fields are marked
        <span class="text-red-500">*</span>
    </p>

    <form action="{{ route('article.comment.store', $article->slug) }}" method="POST" class="space-y-5">
        @csrf

        <div>
            <label for="comment_content" class="block text-sm font-bold text-gray-900 mb-1">
                Comment <span class="text-red-500">*</span>
            </label>
            <textarea id="comment_content" name="content" rows="7"
                class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm
                       focus:outline-none focus:ring-2 focus:ring-amber-400 resize-y
                       @error('content') border-red-500 @enderror"
            >{{ old('content') }}</textarea>
            @error('content')<p class="mt-1 text-xs text-red-500">{{ $message }}</p>@enderror
        </div>

        <div>
            <label for="comment_name" class="block text-sm font-bold text-gray-900 mb-1">
                Name <span class="text-red-500">*</span>
            </label>
            <input type="text" id="comment_name" name="name" value="{{ old('name') }}"
                class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm
                       focus:outline-none focus:ring-2 focus:ring-amber-400
                       @error('name') border-red-500 @enderror">
            @error('name')<p class="mt-1 text-xs text-red-500">{{ $message }}</p>@enderror
        </div>

        <div>
            <label for="comment_email" class="block text-sm font-bold text-gray-900 mb-1">
                Email <span class="text-red-500">*</span>
            </label>
            <input type="email" id="comment_email" name="email" value="{{ old('email') }}"
                class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm
                       focus:outline-none focus:ring-2 focus:ring-amber-400
                       @error('email') border-red-500 @enderror">
            @error('email')<p class="mt-1 text-xs text-red-500">{{ $message }}</p>@enderror
        </div>

        <div class="flex justify-end">
            <button type="submit"
                class="bg-orange-500 hover:bg-orange-600 text-white font-semibold
                       px-7 py-3 rounded-full transition-colors duration-200 text-sm">
                Post a comment
            </button>
        </div>
    </form>
</div>