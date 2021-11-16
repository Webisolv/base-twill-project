@twillBlockTitle('Text With Image')
@twillBlockIcon('text')
@twillBlockGroup('app')

@formField('medias', [
    'name' => 'content_square',
    'label' => 'Image',
])

@formField('input', [
    'name' => 'title',
    'label' => 'Title',
    'translated' => true,
])

@formField('wysiwyg', [
    'name' => 'text',
    'label' => 'Text',
    'placeholder' => 'Text',
    'toolbarOptions' => [
        'bold',
        'italic',
        ['list' => 'bullet'],
        ['list' => 'ordered'],
        [ 'script' => 'super' ],
        [ 'script' => 'sub' ],
        ['header' => [2,3,4,5,6,false]],
        'link',
        'clean'
    ],
    'translated' => true
])
