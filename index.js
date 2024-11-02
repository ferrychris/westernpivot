const functions = require('firebase-functions');
const axios = require('axios');
const admin = require('firebase-admin');

admin.initializeApp();
const db = admin.firestore();
function ray(){
    alert("reat")
}
exports.exchangeAuthCode = functions.https.onRequest(async (req, res) => {
    const authorizationCode = req.body.code;
    try {
        const response = await axios.post('https://oauth2.googleapis.com/token', {
            code: authorizationCode,
            client_id: '4680241477-m9pguejepqqevdq85mtfvtm1951k0pqt.apps.googleusercontent.com',
            client_secret: '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',
            redirect_uri: 'https://westernpivot.netlify.app/auth/callback',
            grant_type: 'authorization_code',
        });

        const tokens = response.data;
        const encryptedRefreshToken = Buffer.from(tokens.refresh_token).toString('base64');

        await db.collection('tokens').doc('user_id').set({
            refresh_token: encryptedRefreshToken,
            access_token: tokens.access_token,
            expires_in: tokens.expires_in,
            created_at: admin.firestore.FieldValue.serverTimestamp(),
        });

        res.status(200).send({ message: 'Tokens saved successfully' });
    } catch (error) {
        console.error('Error exchanging code:', error);
        res.status(500).send({ message: 'Failed to exchange authorization code' });
    }
});