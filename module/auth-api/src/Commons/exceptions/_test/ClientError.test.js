const ClientError = require('../ClientError'); //? get class ClientError.js
 
describe('ClientError', () => {
  it('should throw error when directly use it', () => {
    expect(() => new ClientError('')).toThrowError('cannot instantiate abstract class');
  });
});