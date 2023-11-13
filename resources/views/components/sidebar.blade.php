<!-- Sidebar Section -->
<aside class="w-full md:w-1/3 flex flex-col items-center px-3">

    <div class="w-full bg-white shadow flex flex-col my-4 p-6">
        <h3 class="text-xl font-semibold mb-3">All Categories
        </h3>
        @foreach($categories as $category)
            <a href="{{route('by-category', $category)}}"
               class="text-semibold block py-2 px-3 rounded {{ request('category')?->slug === $category->slug
                ? '!bg-amber-400 text-white' :  ''}}">
                {{$category->title}} ({{$category->total}})
            </a>
        @endforeach
    </div>

    <div class="w-full bg-white shadow flex flex-col my-4 p-6">
        <!-- YOU CAN USE SENDFOX as your email harvester -->
        <p class="text-xl font-semibold pb-5">Subscribe to our newsletter</p>
        <form method="post" action="" class="sendfox-form" id="1w0q7e" data-async="true" data-recaptcha="true">
            <label for="sendfox_form_name"></label>
  <input type="text" id="sendfox_form_name" placeholder="First Name" autocomplete="name" name="first_name" required class="max-w-md min-w-0 flex-auto rounded-md border-0 bg-white px-3.5 w-full py-2 shadow-sm ring-1 ring-inset ring-gray-800 focus:ring-2 focus:ring-inset focus:ring-gray-800 sm:text-sm sm:leading-6"/>
  <label for="sendfox_form_email"></label>
  <input id="sendfox_form_email" name="email" type="email" autocomplete="email" required class="my-2 max-w-md min-w-0 flex-auto rounded-md border-0 bg-white px-3.5 w-full shadow-sm ring-1 ring-inset ring-gray-800 focus:ring-2 focus:ring-inset focus:ring-gray-800 sm:text-sm sm:leading-6" placeholder="Enter your email"><br/>
  <label class="text-gray-800"><input type="checkbox" name="gdpr" value="1" required class="text-amber-400"/> I agree to receive email updates and promotions.</label>
  <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="a_password" tabindex="-1" value="" autocomplete="off" /></div>
  <button type="submit" class="w-full bg-gray-800 text-white font-bold text-sm uppercase rounded hover:bg-black flex items-center justify-center px-2 py-3 mt-4">Subscribe</button>
        </form>
        <script src="https://sendfox.com/js/form.js"></script>
    </div>

    <div class="w-full bg-white shadow flex flex-col my-4 p-6">
        <p class="text-xl font-semibold pb-5">Social Media tags</p>
        <div class="grid grid-cols-3 gap-3">
                 <div class="flex lg:flex-1">
                      <a href="">
                      <i class="fab fa-facebook text-2xl"></i>
                      </a>
                      <a href="" class="-m-1.5 p-1.5">
                      <i class="fab fa-whatsapp text-2xl ml-2"></i>
                      </a>
                      <a href="" class="-m-1.5 p-1.5">
                                <i class="fab fa-linkedin text-2xl ml-2"></i>
                                </a>
                 </div>
        </div>
    </div>
</aside>
