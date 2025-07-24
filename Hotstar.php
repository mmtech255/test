curl -s "https://raw.githubusercontent.com/mmtech255/test/refs/heads/main/Tataplay.php" | grep -v "^#EXTM3U" > playlist1.tmp
curl -s "https://sflex07.fun/SFJSTARM3U/JTVPLUS1717.php" | grep -v "^#EXTM3U" > playlist2.tmp

(echo "#EXTM3U"; cat playlist1.tmp playlist2.tmp) > combined.m3u

rm playlist1.tmp playlist2.tmp

echo "Combined playlist created as combined.m3u"
