	<!--Title-->

	<div class="text-center pt-16 md:pt-32">
	    <p class="text-sm md:text-base text-green-500 font-bold"><?= createArray(' ',$post->date) ?> <span class="text-gray-900">/ </span> <?php
		

	echo createArray(',' , $post->slug);
		
		?></p>
	    <h1 class="font-bold break-normal text-3xl md:text-5xl"><?= $post->title;  ?></h1>
		<p><em><?= $category->slug ?></em></p>
	</div>

	<!--image-->
	<div class="container w-full max-w-6xl mx-auto bg-white bg-cover mt-8 rounded" style="background-image:url('https://source.unsplash.com/collection/1118905/'); height: 75vh;"></div>

	<!--Container-->
	<div class="container max-w-5xl mx-auto -mt-32">

	    <div class="mx-0 sm:mx-6">

	        <div class="bg-white w-full p-8 md:p-24 text-xl md:text-2xl text-gray-800 leading-normal" style="font-family:Georgia,serif;">

	            <!--Post Content-->


	            <!--Lead Para-->
	            <p class="text-2xl md:text-3xl mb-5">
	                👋 Welcome <a class="text-gray-800 hover:text-green-500 no-underline border-b-2 border-green-500" 
					href="https://www.tailwindcss.com"><?=  'Blogers' ?>
				</a> and <a class="text-gray-800 hover:text-green-500 no-underline border-b-2 border-green-500" 
				href="https://www.ghost.org"><?=  'Eager'  ?></a> fan.
					 This starter template is an attempt to 
					 replicate the default Ghost theme 
					 <a class="text-gray-800 hover:text-green-500 no-underline border-b-2 border-green-500" 
					 href="https://demo.ghost.io/welcome">"Casper"</a> 
					 using Tailwind CSS and vanilla Javascript.
	            </p>

	            <p class="py-6"><?= substr($post->content,0,102); ?></p>

	            <p class="py-6"><?= substr($post->content,103,200); ?></p>

	            <ol>
	                <li class="py-3">Maecenas
					 accumsan lacus sit amet 
					 elementum porta. Aliquam eu libero lectus. 
					 Fusce vehicula dictum mi. In non dolor at sem 
					 ullamcorper venenatis ut sed dui. Ut ut est quam.
					  Suspendisse quam quam, commodo sit amet placerat in, 
					  interdum a ipsum. Morbi sit amet tellus scelerisque tortor semper posuere.</li>
	                <li class="py-3">Morbi varius posuere blandit. Praesent gravida bibendum neque eget commodo. Duis auctor ornare mauris, eu accumsan odio viverra in. Proin sagittis maximus pharetra. Nullam lorem mauris, faucibus ut odio tempus, ultrices aliquet ex. Nam id quam eget ipsum luctus hendrerit. Ut eros magna, eleifend ac ornare vulputate, pretium nec felis.</li>
	                <li class="py-3">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc vitae pretium elit. Cras leo mauris, tristique in risus ac, tristique rutrum velit. Mauris accumsan tempor felis vitae gravida. Cras egestas convallis malesuada. Etiam ac ante id tortor vulputate pretium. Maecenas vel sapien suscipit, elementum odio et, consequat tellus.</li>
	            </ol>

	            <blockquote class="border-l-4 border-green-500 italic my-8 pl-8 md:pl-12">Example of blockquote - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.</blockquote>

	            <p class="py-6">Example code block:</p>
	            <pre class="bg-gray-900 rounded text-white font-mono text-base p-4">
					<code class="break-words whitespace-pre-wrap">
&lt;header class="site-header outer"&gt;
  &lt;div class="inner"&gt;
    {{&gt; "site-nav"}}
  &lt;/div&gt;
&lt;/header&gt;
					</code>
				</pre>


	            <!--/ Post Content-->

	        </div>


	        <!--Subscribe-->
	        <div class="container font-sans bg-green-100 rounded mt-8 p-4 md:p-24 text-center">
	            <h2 class="font-bold break-normal text-2xl md:text-4xl">Subscribe to Ghostwind CSS</h2>
	            <h3 class="font-bold break-normal font-normal text-gray-600 text-base md:text-xl">Get the latest posts delivered right to your inbox</h3>
	            <div class="w-full text-center pt-4">
	                <form action="#">
	                    <div class="max-w-sm mx-auto p-1 pr-0 flex flex-wrap items-center">
	                        <input type="email" placeholder="youremail@example.com" class="flex-1 appearance-none rounded shadow p-3 text-gray-600 mr-2 focus:outline-none">
	                        <button type="submit" class="flex-1 mt-4 md:mt-0 block md:inline-block appearance-none bg-green-500 text-white text-base font-semibold tracking-wider uppercase py-4 rounded shadow hover:bg-green-400">Subscribe</button>
	                    </div>
	                </form>
	            </div>
	        </div>
	        <!-- /Subscribe-->


	        <!--Author-->
	        <div class="flex w-full items-center font-sans p-8 md:p-24">
	            <img class="w-10 h-10 rounded-full mr-4" src="http://i.pravatar.cc/300" alt="Avatar of Author">
	            <div class="flex-1">
	                <p class="text-base font-bold text-base md:text-xl leading-none">Ghostwind CSS</p>
	                <p class="text-gray-600 text-xs md:text-base">Tailwind CSS version of Ghost's Casper theme by <a class="text-gray-800 hover:text-green-500 no-underline border-b-2 border-green-500" href="https://www.tailwindtoolbox.com">TailwindToolbox.com</a></p>
	            </div>
	            <div class="justify-end">
	                <button class="bg-transparent border border-gray-500 hover:border-green-500 text-xs text-gray-500 hover:text-green-500 font-bold py-2 px-4 rounded-full">Read More</button>
	            </div>
	        </div>
	        <!--/Author-->

	    </div>


	</div>




	<div class="bg-gray-200">

	    <div class="container w-full max-w-6xl mx-auto px-2 py-8">
	        <div class="flex flex-wrap -mx-2">
	            <div class="w-full md:w-1/3 px-2 pb-12">
	                <div class="h-full bg-white rounded overflow-hidden shadow-md hover:shadow-lg relative smooth">
	                    <a href="#" class="no-underline hover:no-underline">
	                        <img src="https://source.unsplash.com/_AjqGGafofE/400x200" class="h-48 w-full rounded-t shadow-lg">
	                        <div class="p-6 h-auto md:h-48">
	                            <p class="text-gray-600 text-xs md:text-sm">GETTING STARTED</p>
	                            <div class="font-bold text-xl text-gray-900">Lorem ipsum dolor sit amet.</div>
	                            <p class="text-gray-800 font-serif text-base mb-5">
	                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.
	                            </p>
	                        </div>
	                        <div class="flex items-center justify-between inset-x-0 bottom-0 p-6">
	                            <img class="w-8 h-8 rounded-full mr-4" src="http://i.pravatar.cc/300" alt="Avatar of Author">
	                            <p class="text-gray-600 text-xs md:text-sm">2 MIN READ</p>
	                        </div>
	                    </a>
	                </div>
	            </div>
	            <div class="w-full md:w-1/3 px-2 pb-12">
	                <div class="h-full bg-white rounded overflow-hidden shadow-md hover:shadow-lg relative smooth">
	                    <a href="#" class="no-underline hover:no-underline">
	                        <img src="https://source.unsplash.com/_AjqGGafofE/400x200" class="h-48 w-full rounded-t shadow">
	                        <div class="p-6 h-auto md:h-48">
	                            <p class="text-gray-600 text-xs md:text-sm">UNDERWATER</p>
	                            <div class="font-bold text-xl text-gray-900">Biolumini algae diatomeae ecology.</div>
	                            <p class="text-gray-800 font-serif text-base mb-5">
	                                Lorem ipsum dolor sit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.
	                            </p>
	                        </div>
	                        <div class="flex items-center justify-between inset-x-0 bottom-0 p-6">
	                            <img class="w-8 h-8 rounded-full mr-4" src="http://i.pravatar.cc/300" alt="Avatar of Author">
	                            <p class="text-gray-600 text-xs md:text-sm">4 MIN READ</p>
	                        </div>
	                    </a>
	                </div>
	            </div>
	            <div class="w-full md:w-1/3 px-2 pb-12">
	                <div class="h-full bg-white rounded overflow-hidden shadow-md hover:shadow-lg relative smooth">
	                    <a href="#" class="no-underline hover:no-underline">
	                        <img src="https://source.unsplash.com/DEa8_vxKlEo/400x200" class="h-48 w-full rounded-t shadow">
	                        <div class="p-6 h-auto md:h-48">
	                            <p class="text-gray-600 text-xs md:text-sm">FOREST</p>
	                            <div class="font-bold text-xl text-gray-900">What is life but a teardrop in the eye of infinity?</div>
	                            <p class="text-gray-800 font-serif text-base mb-5">
	                                Mollis pretium integer eros et dui orci, lectus nec elit sagittis neque. Dignissim ac nullam semper aliquet volutpat, ut scelerisque.
	                            </p>
	                        </div>
	                        <div class="flex items-center justify-between inset-x-0 bottom-0 p-6">
	                            <img class="w-8 h-8 rounded-full mr-4" src="http://i.pravatar.cc/300" alt="Avatar of Author">
	                            <p class="text-gray-600 text-xs md:text-sm">7 MIN READ</p>
	                        </div>
	                    </a>
	                </div>
	            </div>
	        </div>
	    </div>


	</div>