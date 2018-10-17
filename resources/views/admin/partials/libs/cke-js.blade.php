    <script>
        $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        ClassicEditor
          .create(document.querySelector('#editor'), {
            heading: {
                options: [
                    { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                    { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                    { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                    {
                      model: 'Lead Paragraph',
                      view: {
                          name: 'p',
                          classes: 'lead'
                      },
                      title: 'paragraph (lead)',
                      class: 'lead',

                      // It needs to be converted before the standard 'heading2'.
                      converterPriority: 'high'
                  },
                  {
                      model: 'blockQuote Footer',
                      view: {
                          name: 'footer',
                          classes: 'blockquote-footer'
                      },
                      title: 'blockquote (footer)',
                      class: 'blockquote-footer',

                      // It needs to be converted before the standard 'heading2'.
                      converterPriority: 'high'
                  }
                ]
            }
          })
          .then(function (editor) {
            // The editor instance
          })
          .catch(function (error) {
            console.error(error)
          })

        // bootstrap WYSIHTML5 - text editor

        $('.textarea').wysihtml5({
          toolbar: { fa: true }
        })
      })
    </script>