<h1>{{$post->title}}</h1>

<p>{{$post->body}}</p>
@can('show-post', $post)
<button> Edit Button</button>
@endcan