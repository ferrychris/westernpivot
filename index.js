alert("jjsdj")
// Replace these with your Firebase configuration values
const firebaseConfig = {
    apiKey: "AIzaSyDk3PvJ7rkxHYwb0FLn17dO1QSAQSUYKMQ",
    authDomain: "western-pivot-375509.firebaseapp.com",
    projectId: "western-pivot-375509",
    storageBucket: "western-pivot-375509.appspot.com",
    messagingSenderId: "YOUR_MESSAGING_SENDER_ID",
    appId: "YOUR_APP_ID"
};

// Initialize Firebase
firebase.initializeApp(firebaseConfig);
const db = firebase.firestore();
function redirectToGoogleOAuth() {
    const clientId = "4680241477-m9pguejepqqevdq85mtfvtm1951k0pqt.apps.googleusercontent.com";
    const redirectUri = "https://westernpivot.netlify.app/";
    const scope = "https://www.googleapis.com/auth/adwords";
    const authUrl = `https://accounts.google.com/o/oauth2/v2/auth?client_id=${clientId}&redirect_uri=${redirectUri}&response_type=code&scope=${scope}`;
    
    window.location.href = authUrl;
}
// Extract the code from the URL
const urlParams = new URLSearchParams(window.location.search);
const authorizationCode = urlParams.get('code');

if (authorizationCode) {
    exchangeCodeForTokens(authorizationCode);
}
async function exchangeCodeForTokens(code) {
    try {
        const clientId = "YOUR_CLIENT_ID";
        const clientSecret = "YOUR_CLIENT_SECRET";
        const redirectUri = "YOUR_REDIRECT_URI";

        const response = await axios.post('https://oauth2.googleapis.com/token', {
            code: code,
            client_id: clientId,
            client_secret: clientSecret,
            redirect_uri: redirectUri,
            grant_type: 'authorization_code'
        });

        const tokens = response.data;

        // Base64-encode the refresh token
        const encodedRefreshToken = btoa(tokens.refresh_token);

        // Store in Firestore
        await db.collection('tokens').doc('user_id').set({
            refresh_token: encodedRefreshToken,
            access_token: tokens.access_token,
            expires_in: tokens.expires_in,
            created_at: firebase.firestore.FieldValue.serverTimestamp(),
        });

        console.log('Tokens stored successfully!');
    } catch (error) {
        console.error('Error exchanging authorization code:', error);
    }
}
