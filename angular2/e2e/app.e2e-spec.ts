import { AngularLumenPage } from './app.po';

describe('angular-lumen App', function() {
  let page: AngularLumenPage;

  beforeEach(() => {
    page = new AngularLumenPage();
  });

  it('should display message saying app works', () => {
    page.navigateTo();
    expect(page.getParagraphText()).toEqual('app works!');
  });
});
