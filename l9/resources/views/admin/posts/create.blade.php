<x-layout>
    <x-setting heading="Publish New Post">
    
    <form method="POST" action="/admin/posts" enctype="multipart/form-data">
            @csrf
            <x-form.input name="title"/>
            <x-form.input name="slug"/>
            <x-form.input name="thumbnail" type="file"/>
            <x-form.textarea name="excerpt"/>
            <x-form.textarea name="body"/>

            <x-form.field>
                <label for="category_id" class="block mb-2 uppercase font-bold text-xs text-gray-700">Category</label>
                <select name="category_id" id="category_id">
                    
                    @foreach(App\Models\Category::all() as $category)
                    <option value="{{ $category->id }}"
                    {{ old('category_id') == $category->id ? 'selected' : ''}}>{{ ucwords($category->name) }}</option>
                    @endforeach
                    
                </select>


                <x-form.error name="category"/>
            </x-form.field>
            
            <x-form.button>Publish</x-form.button>
        </form>
    </section>
    </x-setting>
    
</x-layout>