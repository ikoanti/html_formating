(function() {
    tinymce.PluginManager.add('htmltextformatting', function(editor, url) {
        var formattingTags = ['underline', 'unlink', 'sub', 'sup'];

        formattingTags.forEach(function(tag) {
            editor.addButton(tag, {
                text: tag.toUpperCase(),
                icon: false,
                onclick: function() {
                    var selectedText = editor.selection.getContent({ format: 'html' });

                    if (!selectedText) return;

                    editor.undoManager.transact(function() {
                        editor.execCommand(
                            'mceInsertContent',
                            false,
                            `<${tag}>${selectedText}</${tag}>`
                        );
                    });
                }
            });
        });
    });
})();
