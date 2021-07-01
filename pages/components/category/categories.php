<div class="flex items-center justify-center min-h-screen bg-gray-900">
    <div class="col-span-12">
        <div class="overflow-auto lg:overflow-visible ">
            <table class="table text-gray-400 border-separate space-y-6 text-sm">
                <thead class="bg-gray-800 text-gray-500">
                    <tr>
                        <th class="p-3">Category</th>
                        <th class="p-3 text-left">Article</th>
                        <th class="p-3 text-left">Author</th>
                        <th class="p-3 text-left">Slug</th>
                        <th class="p-3 text-left">date</th>
                    </tr>
                </thead>
                <tbody>

                  <?php  foreach($posts as $val) : ?>
                        <tr class="bg-gray-800">
                            <td class="p-3">
                                <div class="flex align-items-center">
                                    <img class="rounded-full h-12 w-12  object-cover" src="https://images.unsplash.com/photo-1613995369866-080828a12f60?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2134&q=80" alt="unsplash image">
                                    <div class="ml-3">
                                        <div class=""><?= $val->category_name ?></div>
                                    </div>
                                </div>
                            </td>
                            <td class="p-3">
                                <?= $val->title ?>
                            </td>
                            <td class="p-3 font-bold">
                                <?= $val->author ?>
                            </td>
                            <td class="p-3">
                                <span class="bg-red-400 text-gray-50 rounded-md px-2"><?= createArray(',', $val->slug)  ?></span>
                            </td>
                            <td class="p-3 ">
                                <a href="#" class="text-gray-400 hover:text-gray-100 mr-2">
                                    <i class="material-icons-outlined text-base"><?= createArray(' ', $val->date) ?></i>
                                </a>
                            </td>

                        </tr>
                        <?php endforeach;?>
                   
                </tbody>
            </table>
        </div>
    </div>
</div>