document.addEventListener('DOMContentLoaded', function () {
  try {
    var apiKey = window.BUILDER_API_KEY || '';
    var model = window.BUILDER_MODEL || 'page';
    var pageUrl = window.BUILDER_PAGE_URL || window.location.pathname;

    if (!apiKey) {
      // Nothing to do if no API key configured
      return;
    }

    var container = document.getElementById('builder-content');
    if (!container) return;

    var endpoint = 'https://cdn.builder.io/api/v1/html/' + encodeURIComponent(model) + '?apiKey=' + encodeURIComponent(apiKey) + '&url=' + encodeURIComponent(pageUrl);

    fetch(endpoint, { method: 'GET' })
      .then(function (res) { return res.text(); })
      .then(function (html) {
        // Builder's HTML API returns rendered HTML for the model and URL
        container.innerHTML = html;
      })
      .catch(function (err) {
        console.error('Builder fetch error:', err);
        container.innerHTML = '<p>Failed to load content.</p>';
      });
  } catch (e) {
    console.error('Builder init error', e);
  }
});
