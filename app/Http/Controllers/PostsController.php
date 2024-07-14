<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Posts;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = [
            [
                'id' => '1',
                'title' => 'Lorem ipsum dolor sit amet',
                'category' => 'perawat',
                'slug' => 'lorem-per',
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe, porro non deserunt explicabo voluptatum voluptas unde repellendus. Maxime cum temporibus iure alias id vitae corrupti, vel blanditiis soluta optio? Ex nisi aperiam sunt distinctio, quod repudiandae alias cumque quibusdam. Totam nemo ipsam, aliquam minima at, accusantium possimus voluptatum eum officia rerum doloribus. Repudiandae aliquam, quo eligendi earum totam aspernatur officia numquam tempore aliquid? Consequatur laudantium voluptatum inventore totam facilis quaerat laborum eius assumenda, velit quisquam voluptate consectetur, distinctio voluptas cumque mollitia eos. Debitis odit omnis nobis excepturi aspernatur, deserunt ex, libero quis accusantium corrupti quibusdam. Cum laudantium optio tenetur ipsum sunt velit sed impedit dolore, nisi, reiciendis quae facere consequatur deserunt alias maxime laborum commodi. Fuga reprehenderit numquam placeat voluptatum, commodi vitae officiis aliquid inventore in impedit. Quam, laboriosam nesciunt voluptatem dignissimos molestias consequatur earum alias quas repellat cupiditate eos saepe, sunt id, corrupti placeat odit facere? Illo eos harum odit sunt explicabo cupiditate consequatur autem debitis quia, nesciunt ratione neque nisi exercitationem dolores hic doloribus? Rerum quo veritatis, aspernatur accusantium quibusdam dolores rem perferendis natus dolor exercitationem assumenda veniam consequatur dolorum aliquid minima facere adipisci deleniti ut doloremque cumque eos suscipit voluptate ducimus vitae! Autem, doloribus soluta? Quod placeat id facere vel sint, optio nostrum minima voluptates delectus, blanditiis aspernatur atque deserunt aperiam saepe illum beatae a sequi ducimus perferendis est eaque iste! Tempora, sapiente voluptatibus! Ratione maxime illum quam nostrum porro fuga rerum tenetur error nemo accusantium quisquam aliquam culpa ab in alias facilis dolore, facere pariatur ad iusto, voluptatibus, consectetur recusandae nisi. Voluptatem, numquam ea modi natus minima, eveniet temporibus quisquam unde tenetur debitis fugit aperiam, praesentium officia itaque fugiat cum nesciunt? Nostrum, tempora. Iusto veniam odio voluptatem ipsa, totam est quasi perferendis, at molestias consequuntur vel minima sit nobis explicabo blanditiis modi nihil velit voluptates deleniti quia incidunt. Facilis esse repudiandae nisi magni exercitationem dolores beatae, ipsa aliquid nostrum, quis voluptatem accusamus, voluptas autem sunt non aspernatur nulla! Ipsa similique, repellat quasi quisquam laudantium reiciendis, soluta odit corporis minus, consequuntur doloribus harum saepe debitis iure. Necessitatibus eveniet maxime est accusamus aut et eos non adipisci a temporibus quae molestias, odit neque labore architecto omnis asperiores molestiae obcaecati similique perspiciatis velit repudiandae excepturi ab. Quis doloremque aliquid ipsa maiores. Debitis, nobis iusto veritatis odio dolorum veniam consequuntur corrupti? Voluptas error dicta repellat ad tenetur ullam, delectus, aliquid repellendus accusamus dolores corrupti dolor repudiandae quo. Tempora, repellendus perspiciatis soluta similique eveniet sunt labore necessitatibus consequuntur dignissimos est aut consequatur quasi ea! Nobis, tempore. Harum tenetur eum corrupti, suscipit deserunt repudiandae sint tempore placeat minus ipsam reprehenderit odio amet, magnam recusandae quidem temporibus vel itaque, maxime sit beatae! Hic velit dignissimos quam architecto, blanditiis ducimus? Animi ullam at alias quidem accusantium id temporibus expedita sint nisi, consequuntur culpa, soluta harum dolorum earum repudiandae, perferendis eveniet nesciunt pariatur. Sed mollitia culpa nihil omnis accusantium ipsum necessitatibus ut rerum, enim vitae eius non illo repudiandae rem, doloremque tenetur nulla. Culpa doloremque sequi fugiat accusantium inventore consequatur adipisci itaque est vel quos.',
                'image' => 'https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80',
            ],
            [
                'id' => '2', # Changed 'id' to '2' for the second post
                'title' => 'Lorem ipsum dolor sit amet',
                'category' => 'perawat',
                'slug' => 'lorem-per',
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe, porro non deserunt explicabo voluptatum voluptas unde repellendus. Maxime cum temporibus iure alias id vitae corrupti, vel blanditiis soluta optio? Ex nisi aperiam sunt distinctio, quod repudiandae alias cumque quibusdam. Totam nemo ipsam, aliquam minima at, accusantium possimus voluptatum eum officia rerum doloribus. Repudiandae aliquam, quo eligendi earum totam aspernatur officia numquam tempore aliquid? Consequatur laudantium voluptatum inventore totam facilis quaerat laborum eius assumenda, velit quisquam voluptate consectetur, distinctio voluptas cumque mollitia eos. Debitis odit omnis nobis excepturi aspernatur, deserunt ex, libero quis accusantium corrupti quibusdam. Cum laudantium optio tenetur ipsum sunt velit sed impedit dolore, nisi, reiciendis quae facere consequatur deserunt alias maxime laborum commodi. Fuga reprehenderit numquam placeat voluptatum, commodi vitae officiis aliquid inventore in impedit. Quam, laboriosam nesciunt voluptatem dignissimos molestias consequatur earum alias quas repellat cupiditate eos saepe, sunt id, corrupti placeat odit facere? Illo eos harum odit sunt explicabo cupiditate consequatur autem debitis quia, nesciunt ratione neque nisi exercitationem dolores hic doloribus? Rerum quo veritatis, aspernatur accusantium quibusdam dolores rem perferendis natus dolor exercitationem assumenda veniam consequatur dolorum aliquid minima facere adipisci deleniti ut doloremque cumque eos suscipit voluptate ducimus vitae! Autem, doloribus soluta? Quod placeat id facere vel sint, optio nostrum minima voluptates delectus, blanditiis aspernatur atque deserunt aperiam saepe illum beatae a sequi ducimus perferendis est eaque iste! Tempora, sapiente voluptatibus! Ratione maxime illum quam nostrum porro fuga rerum tenetur error nemo accusantium quisquam aliquam culpa ab in alias facilis dolore, facere pariatur ad iusto, voluptatibus, consectetur recusandae nisi. Voluptatem, numquam ea modi natus minima, eveniet temporibus quisquam unde tenetur debitis fugit aperiam, praesentium officia itaque fugiat cum nesciunt? Nostrum, tempora. Iusto veniam odio voluptatem ipsa, totam est quasi perferendis, at molestias consequuntur vel minima sit nobis explicabo blanditiis modi nihil velit voluptates deleniti quia incidunt. Facilis esse repudiandae nisi magni exercitationem dolores beatae, ipsa aliquid nostrum, quis voluptatem',
            ]];
        // dd($posts);
        return Inertia::render('Posts/Index', [
            'posts' => $posts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $post = Posts::where('slug', $slug)->firstOrFail();
        return Inertia::render('PostShow', [
            'post' => $post,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Posts $posts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Posts $posts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Posts $posts)
    {
        //
    }
}
