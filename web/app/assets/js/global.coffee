ItemView = Backbone.View.extend(
  el: $('body')
  render: ->
    @$el.html 'Hello backbone'
    this
  alert: ->
    alert 'boo'
    return
  initialize: ->
    @alert()
    @render()
    return
)