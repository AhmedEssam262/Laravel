<!-- to pass variable to another view -->
    public function show()
    {
        $mydata = DB::table('posts')->get();
        return view('postss.show', compact('mydata'));
    }
