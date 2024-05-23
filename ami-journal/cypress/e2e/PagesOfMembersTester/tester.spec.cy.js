describe('Pages of Members Tester', () => {
  const brokenLinks = [];

  beforeEach(() => {
    cy.visit('/about');  // Ensure this matches the correct path in your application
  });

  it('should check all links to ensure they are not 404', () => {
    // Find all links
    cy.get('a').each(($el) => {
      const href = $el.prop('href');

      // Only proceed if the href is not empty
      if (href) {
        // Request each link and verify the status is not 404
        cy.request({
          url: href,
          failOnStatusCode: false  // Do not fail the test if the status code is not 2xx
        }).then((response) => {
          // Check the status code and collect broken links
          if (response.status === 404) {
            brokenLinks.push(href);
          }
          if (response.status === 503) {
            brokenLinks.push(href);
          }
        });
      }
    });
  });

  afterEach(() => {
    if (brokenLinks.length > 0) {
      cy.log('Broken Links:', brokenLinks);
      // Optionally, you could throw an error here to fail the test if any broken links are found, and contact the owner of the site
      throw new Error(`Found ${brokenLinks.length} broken links:\n${brokenLinks.join('\n')}`);
    }
  });
});