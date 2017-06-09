/**
 * @license Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here.
	// For the complete reference:
	// http://docs.ckeditor.com/#!/api/CKEDITOR.config

	// The toolbar groups arrangement, optimized for two toolbar rows.
	config.toolbarGroups = [
        { name: 'Blue Title', element: 'h2', styles: { color: 'Blue' } },
        { name: 'basicstyles', groups: [ 'basicstyles' ] },
        { name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
		{ name: 'links' },
		{ name: 'insert' },
		{ name: 'forms' },
		{ name: 'tools' },
		{ name: 'document',	   groups: [ 'mode', 'document', 'doctools' ] },
		{ name: 'others' },
		'/',
		{ name: 'styles' },
		{ name: 'colors' },
		{ name: 'about' }
	];

	// Remove some buttons, provided by the standard plugins, which we don't
	// need to have in the Standard(s) toolbar.
	config.removeButtons = 'Underline,Subscript,Superscript,Clipboard,Strike,Outdent,Indent,Table,HorizontalRule,About';

	// Se the most common block elements.
	config.format_tags = 'h3';

	// Make dialogs simpler.
	config.removeDialogTabs = 'image:advanced;link:advanced';

    config.autoGrow_minHeight = 600;
    config.height = 500;
    config.format_p = { element: 'p', attributes: { 'class': 'normalPara' } };
    config.format_h3 = { element: 'h3'}

	// elFinder
	// config.filebrowserBrowseUrl = 'admin/elfinder/ckeditor';

    config.extraPlugins = 'image2';
    config.extraPlugins = 'codeTag';

    config.syntaxhighlight_lang = 'css', 'javascript', 'php', 'sass', 'scss', 'sql', 'xml', 'xhtml', 'xslt', 'html';






    /*config.codeSnippet_theme = 'pojoaque';
    config.codeSnippet_languages = {
        css: 'CSS',
        html: 'HTML',
        javascript: 'JavaScript',
        json: 'JSON',
        markdown: 'Markdown',
        coffeescript: 'CoffeeScript',
        sql: 'SQL',
    };
    config.codeSnippet_codeClass = 'hljs';*/


};

