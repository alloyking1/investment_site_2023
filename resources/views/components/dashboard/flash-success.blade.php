<div x-data="{open:true}">
    <div class="bg-green-400 text-white mb-4 p-4 rounded" x-show="open">
        <button class="bg-white text-gray-700 p-2 rounded-full" x-on:click="open = ! open">x</button>
       {{$slot}}
    </div>
</div>