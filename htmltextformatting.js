(function() {
    tinymce.PluginManager.add('htmltextformatting', function(editor, url) {
        var formattingTags = ['underline', 'unlink', 'sub', 'sup'];
        for (var i = 0; i < formattingTags.length; i++) {
            editor.addButton(formattingTags[i], {
                text: formattingTags[i].toUpperCase(),
                icon: false,
                onclick: function() {
                    editor.execCommand('mceInsertContent', false, '<' + this.text() + '>' + editor.selection.getContent() + '</' + this.text() + '>');
                }
            });
        }
    });
})();
