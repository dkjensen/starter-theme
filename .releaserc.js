module.exports = {
    tagFormat: "${version}",
    branch: "master",
    plugins: [
      ["@semantic-release/npm", { npmPublish: false }],
      "@semantic-release/github",
      [
        "semantic-release-plugin-update-version-in-files",
        {
          "files": [
            "functions.php",
            "style.css"
          ],
          "placeholder": "0.0.0-development"
        }
      ]
    ]
  };
  