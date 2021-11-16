@twillRepeaterTitle('Faq item')

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
        'link',
        'clean'
    ],
    'translated' => true
])

@formField('checkbox', [
    'name' => 'open',
    'label' => 'Open by default'
])

@formField('input', [
    'name' => 'cta_text',
    'label' => 'Call to action text',
    'translated' => true,
])

@formField('browser', [
    'moduleName' => 'content.pages',
    'name' => 'cta_target',
    'label' => 'Call to action target',
    'max' => 1,
])
