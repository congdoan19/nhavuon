
    <?php
        $categories=DB::table('categories')->where([['status',1],['parent_id',0]])->get();
    ?>
    
<ul>
    @foreach($categories as $category)
            <?php
                $sub_categories=DB::table('categories')->select('id','name')->where([['parent_id',$category->id],['status',1]])->get();
            ?>
    <li>
        <a href="{{route('cats',$category->id)}}">{{$category->name}}</a>
        <span class="pull-right"><i class="fa fa-caret-right" aria-hidden="true"></i></span>
    </li>
    @endforeach
    
</ul>

    

