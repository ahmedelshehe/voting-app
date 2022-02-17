<x-app-layout>
    <div class="filters flex space-x-6 ">
        <div class="w-1/3" >
            <select name="category" id="category" class="w-full rounded-xl px-4 py-2 border-none">
                <option value="Category One"> Category 1</option>
                <option value="Category Two"> Category 2</option>
                <option value="Category Three"> Category 3</option>
                <option value="Category Four"> Category 4</option>
            </select>
        </div>
        <div class="w-1/3" >
            <select name="another_filter" id="another_filter" class="w-full rounded-xl px-4 py-2 border-none">
                <option  value="Category One"> Category 1</option>
                <option value="Category Two"> Category 2</option>
                <option value="Category Three"> Category 3</option>
                <option value="Category Four"> Category 4</option>
            </select>
        </div>
        <div class="w-2/3 relative">
            <input type="text" placeholder="Find An Idea" class="w-full rounded-xl bg-white px-4 py-2 pl-8 border-none">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg xmlns="http://www.w3.org/2000/svg" class=" w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>
    </div>
    <!----- end filters ----->
</x-app-layout>