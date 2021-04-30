describe(`checkBrackets`, function() {
    it('Find number of needed brackets', function() {
        assert.equal(checkBrackets('1)()(())2(()'), 2);
    });
    it('Find number of needed brackets', function() {
        assert.equal(checkBrackets(NaN), -1);
    });
    it('Find number of needed brackets', function() {
        assert.equal(checkBrackets(5), -1);
    });
    it('Find number of needed brackets', function() {
        assert.equal(checkBrackets('ftygnjtfcghn'), -1);
    });
    it('Find number of needed brackets', function() {
        assert.equal(checkBrackets('][}]'), -1);
    });
    it('Find number of needed brackets', function() {
        assert.equal(checkBrackets(true), -1);
    });
    it('Find number of needed brackets', function() {
        assert.equal(checkBrackets('kjubku()(((())K)KNN((L<KN'), 3);
    });
    it('Find number of needed brackets', function() {
        assert.equal(checkBrackets('hb((()()((ljknlkg'), 4);
    });
    it('Find number of needed brackets', function() {
        assert.equal(checkBrackets('fbgkuv(()()((fkjguy)(()'), 3);
    });
    it('Find number of needed brackets', function() {
        assert.equal(checkBrackets('""HJKIY"rktij(()({'), 2);
    });
    it('Find number of needed brackets', function() {
        assert.equal(checkBrackets(',fktgjnyh(()(()((:uhlki]'),4);
    });
    it('Find number of needed brackets', function() {
        assert.equal(checkBrackets('kjfglh(()(()(kfug'), 3);
    });
    it('Find number of needed brackets', function() {
        assert.equal(checkBrackets('fjugk(())()('), 1);
    });
    it('Find number of needed brackets', function() {
        assert.equal(checkBrackets('ktjrnlg()(()9ghj((((((())()'), 6);
    });
    it('Find number of needed brackets', function() {
        assert.equal(checkBrackets('lkyguh(()'), 1);
    });
    it('Find number of needed brackets', function() {
        assert.equal(checkBrackets('rtkiuhjm()))(kjt'), 3);
    });
    it('Find number of needed brackets', function() {
        assert.equal(checkBrackets('kfjgnbhkjm((()))((()))'), 0);
    });
});

