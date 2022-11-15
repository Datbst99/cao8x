
var option_editor = {
    toolbar: {
        items: [
            'bold',
            'italic',
            'underline',
            'strikethrough',
            'removeFormat',
            '|',
            'fontSize',
            'fontFamily',
            'fontBackgroundColor',
            'fontColor',
            '|',
            'link'
        ]
    },
    language: 'vi',
    blockToolbar: [
        'heading',
        '|',
        'numberedList',
        'bulletedList',
        '|',
        'indent',
        'outdent',
        'alignment',
        // 'fontBackgroundColor',
        // 'fontColor',
        '|',
        'CKFinder',
        // 'imageUpload',
        'blockQuote',
        'insertTable',
        'htmlEmbed',
        'codeBlock',
        '|',
        'horizontalLine',
        'pageBreak',
        // 'mediaEmbed',
        // '|',
        // 'specialCharacters',
        // '|',
        // 'undo',
        // 'redo'
    ],
    image: {
        toolbar: [
            'imageTextAlternative',
            'imageStyle:inline',
            'imageStyle:block',
            'imageStyle:side',
            'linkImage',
            'toggleImageCaption',
        ]
    },
    table: {
        contentToolbar: [
            'tableColumn',
            'tableRow',
            'mergeTableCells',
            'tableCellProperties',
            'tableProperties'
        ]
    },
    autosave: {
        save( editor ) {
            window.editor = editor.getData()
            // return saveData( editor.getData() );
        }
    },
    licenseKey: '',
    ckfinder:{
        uploadUrl: '/ckfinder/connector?command=QuickUpload&type=Images&responseType=json',
    },
    heading: {
        options: [
            { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
//                    { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
            { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
            { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
            { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
            // { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
            // { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
        ]
    },

    placeholder: 'Tạo nội dung website',
};
const watchdog = new CKSource.EditorWatchdog();
window.watchdog = watchdog;

const editors = {};

watchdog.setCreator( ( element, config ) => {
    return CKSource.Editor
        .create( element, config )
        .then( editor => {
            editors[element.id] =  editor;
        })
} );

watchdog.setDestructor( editor => {
    return editor.destroy();
} );

watchdog.on( 'error', handleError );

function handleError( error ) {
    // console.log( error );
}
watchdog.create( document.querySelector('#textareaContent'), option_editor).catch( handleError );


window.pushData = function (id) {
    let content = editor
    let _token   = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        url: `/admin/category/${id}/config/change`,
        method: 'post',
        data : {
            content,
            _token: _token
        }
    }).done(function (res) {
        location.replace(res.link)
    })
}
