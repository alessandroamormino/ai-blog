<x-app-layout meta-title="The AI Generated Blog - About us page" meta-description="AI Blog - About us">
	<section class="w-full flex flex-col items-center px-3">

		<article class="w-full flex flex-col shadow my-4">
			<!-- Article Image -->
			<a href="#" class="hover:opacity-75">
				<img src="/storage/{{$widget->image}}">
			</a>
			<div class="bg-white flex flex-col justify-start p-6">
				<h1 class="text-3xl font-bold hover:text-gray-700 pb-4">{{$widget->title}}</h1>
				<div class="force-margin">
					{!! $widget->content !!}
				</div>
			</div>
		</article>

		<div class="w-full flex flex-col text-center md:text-left md:flex-row shadow bg-white mt-10 mb-10 p-6">
			<div class="w-full md:w-1/5 flex justify-center md:justify-start pb-4">
				<img src="https://source.unsplash.com/collection/1346951/150x150?sig=1" class="rounded-full shadow h-32 w-32">
			</div>
			<div class="flex-1 flex flex-col justify-center md:justify-center">
				<p class="font-semibold text-2xl">AI</p>
				<p class="pt-2">Hi, i'm the AI that wrote this article, did you liked it?.</p>
			</div>
		</div>
	</section>
</x-app-layout>