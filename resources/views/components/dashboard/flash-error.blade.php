 <div x-data="{open:true}">
    <div class="bg-red-400 text-white mb-4 p-4 rounded flex justify-between" x-show="open">
       {{$slot}}
       <button class="bg-white text-gray-700 p-2 rounded-full" x-on:click="open = ! open">Close</button>
    </div>
</div>