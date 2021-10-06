<div
    x-data="{content: @entangle($attributes->wire('model')),...setupEditor()}"
    x-init="() => init($refs.editor)"
    wire:ignore
    {{ $attributes->whereDoesntStartWith('wire:model') }}>

    <!-- The Controls -->
    <template x-if="editor">
        <div>
            <button @click="editor.chain().toggleBold().focus().run()">Bold</button>
            <button @click="editor.chain().focus().toggleItalic().run()">italic</button>
            <button @click="editor.chain().focus().setParagraph().run()"> paragraph</button>
            <button @click="editor.chain().focus().toggleHeading({ level: 1 }).run()">h1</button>
            <button @click="editor.chain().focus().toggleHeading({ level: 2 }).run()">h2</button>
            <button @click="editor.chain().focus().toggleHeading({ level: 3 }).run()">h3</button>
            <button @click="editor.chain().focus().toggleHeading({ level: 4 }).run()">h4</button>
            <button @click="editor.chain().focus().toggleHeading({ level: 5 }).run()">h5</button>
            <button @click="editor.chain().focus().toggleHeading({ level: 6 }).run()">h6</button>
            <button @click="editor.chain().focus().toggleBulletList().run()">bullet list</button>
            <button @click="editor.chain().focus().toggleOrderedList().run()">ordered list</button>
            <button @click="editor.chain().focus().toggleCodeBlock().run()">code block</button>
            <button @click="editor.chain().focus().toggleBlockquote().run()">blockquote</button>
            <button @click="editor.chain().focus().undo().run()">undo</button>
            <button @click="editor.chain().focus().redo().run()">redo</button>
        </div>
    </template>

    <!-- The editor -->
    <div x-ref="editor"></div>
</div>