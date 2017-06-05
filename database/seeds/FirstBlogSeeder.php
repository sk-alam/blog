<?php

use Illuminate\Database\Seeder;

class FirstBlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $published_at =  new \DateTime();

        \App\Blog::create([
            'title' => 'First Blog From Admin!',
            'body' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis tellus vel felis suscipit condimentum. Donec id lectus nunc. Aliquam a est at lacus tempus tempus. Mauris iaculis arcu eu leo posuere, vitae pharetra ex suscipit. Nam convallis in massa a pellentesque. 
            Etiam vestibulum lacus vitae ipsum malesuada semper. Duis nulla arcu, sodales a vehicula non, convallis id massa. Ut ut elementum mauris, non placerat eros. Nullam massa elit, porttitor et suscipit vitae, congue ac risus. Vestibulum consectetur nisl et elit malesuada rhoncus. Praesent commodo luctus eros, eu imperdiet justo tincidunt eget. Suspendisse elementum ut sapien placerat maximus.
            Phasellus in ultricies felis. Aliquam in hendrerit arcu. Donec a lacus elementum, vestibulum dui eu, varius eros. Curabitur rutrum, ante ut consectetur eleifend, ante purus malesuada diam, nec dictum enim sapien at justo. Nulla sagittis sapien non tortor auctor, ut tincidunt lectus mattis. Nullam pulvinar malesuada magna at sollicitudin. Cras rhoncus, leo eget ultrices consequat, quam mi sodales tellus, ac rhoncus elit mi eu ex. Mauris at dolor velit. Integer cursus efficitur diam dictum dignissim. Ut eu ex blandit, vestibulum augue a, convallis massa. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris pharetra tellus eleifend arcu volutpat pharetra. Proin id arcu in quam commodo ornare id et nunc. Nullam ultrices ultricies odio, condimentum iaculis urna pulvinar eget. Nulla sed nisl vitae metus tincidunt egestas malesuada et tortor. Proin malesuada, ante a lobortis viverra, eros nulla egestas felis, sit amet gravida sapien mi sed velit.",
            'user_id' => 1,
            'active' => 1,
            'published_at' => $published_at->format('Y:m:d H:i:s'),
        ]);
    }
}
