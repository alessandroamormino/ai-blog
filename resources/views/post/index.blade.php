<?php
	/** @var $posts \Illuminate\Pagination|LengthAwarePaginator */
?>
<x-app-layout :meta-title="'AI Blog - Posts by Category ' . $category->title" :meta-description="'AI Generated Blog About Category - '.$category->title">
	<!-- Posts Section -->
	<section class="w-full md:w-2/3 flex flex-col items-center px-3">
		@foreach($posts as $post)
			<x-post-item :post="$post"></x-post-item>
		@endforeach
		<!-- Pagination -->
		{{$posts->onEachSide(1)->links()}}
	</section>
	<x-sidebar />
</x-app-layout>
