public function index()
{
    // Fetch all blog posts from the database
    $posts = \App\Models\Post::all();

    return view('blog.index', ['posts' => $posts]);
}

public function show($slug)
{
    // Fetch a single blog post by slug
    $post = \App\Models\Post::where('slug', $slug)->first();

    return view('blog.show', ['post' => $post]);
}
