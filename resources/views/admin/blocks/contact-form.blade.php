@twillBlockTitle('Contact Form')
@twillBlockIcon('text')
@twillBlockGroup('app')

@formField('wysiwyg', [
    'name' => 'text',
    'label' => 'Content next to the form',
    'placeholder' => 'Text',
    'toolbarOptions' => [
        'bold',
        'italic',
        ['list' => 'bullet'],
        ['list' => 'ordered'],
        [ 'script' => 'super' ],
        [ 'script' => 'sub' ],
        'link',
        'clean'
    ],
    'translated' => true
])

@formField('input', [
    'name' => 'success_message',
    'label' => __('Success message'),
    'translated' => true,
])
