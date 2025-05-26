#!/bin/bash

set -e

echo "🔁 [START] Export + Replace DB for WordPress"

# 👨‍💻 Local DB info
LOCAL_DB_NAME="wp1"
LOCAL_DB_USER="root"
LOCAL_DB_PASS="root_pass"

# 🌐 EC2 URL info
OLD_URL="http://192.168.1.100:8000"
NEW_URL="http://46.137.236.178"

# 📁 Output file
BACKUP_PATH="wordpress-docker/Dockerfile/wordpress/mysql_db"
BACKUP_FILE="$BACKUP_PATH/wp1_backup.sql"

mkdir -p "$BACKUP_PATH"

# 📤 Dump DB
echo "📤 Dumping DB..."
mysqldump -u"$LOCAL_DB_USER" -p"$LOCAL_DB_PASS" "$LOCAL_DB_NAME" > "$BACKUP_FILE"

# 🔁 Replace URL
echo "🔧 Replacing $OLD_URL ➜ $NEW_URL in SQL..."
sed -i "s|$OLD_URL|$NEW_URL|g" "$BACKUP_FILE"

echo "✅ Done! SQL saved at: $BACKUP_FILE"

